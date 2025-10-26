<?php

namespace Dev\PHPActions;

class Run
{
    public static function action(mixed $action): Response
    {
        $response = null;

        if ($action->validate()) {
            $response = $action->handle();
        } else {
            $response = $action->error();
        }

        $response = Action::parse_action_handle_response($action, $response);

        if (!$response->isDone()) {
            $errorResponse = $action->error($response);

            $errorResponse = Action::parse_action_error_response($action, $errorResponse);

            if (!empty($errorResponse)) {
                $response = $errorResponse;
            }
        }

        if ($response->isDone()) {
            $response = $action->done($response);

            $response = Action::parse_action_done_response($action, $response);

            /** Actions can also be executed asynchronously in conjunction with Laravel. */
            if (method_exists($action, 'dispatchJob')) {
                $action->dispatchJob($response->getData());

                return Response::done($action, $response);
            }
        }

        return $response;
    }

    public static function validator(mixed $validator, mixed $data): bool
    {
        return Validator::handle($validator, $data);
    }

    public static function converter(mixed $converter, array $data = [])
    {
        $converter_class = (new $converter($data));

        return $converter_class->handle();
    }
}
