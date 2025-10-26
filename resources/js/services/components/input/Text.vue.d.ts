declare const _default: import("vue").DefineComponent<{
    hint: {};
    error: {};
    id: {
        type: StringConstructor;
    };
    name: {
        type: StringConstructor;
    };
    type: {
        type: StringConstructor;
        default: string;
    };
    title: {
        type: StringConstructor;
        required: true;
    };
    placeholder: {
        type: StringConstructor;
    };
    required: {
        type: BooleanConstructor;
        default: boolean;
    };
    collapsed: {
        type: BooleanConstructor;
        default: boolean;
    };
    xvalue: {
        type: StringConstructor;
    };
    disabled: {
        type: BooleanConstructor;
        default: boolean;
    };
}, {}, {
    value: string | undefined;
}, {}, {
    onInput: (event: any) => void;
}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    input: (...args: any[]) => void;
}, string, import("vue").PublicProps, Readonly<import("vue").ExtractPropTypes<{
    hint: {};
    error: {};
    id: {
        type: StringConstructor;
    };
    name: {
        type: StringConstructor;
    };
    type: {
        type: StringConstructor;
        default: string;
    };
    title: {
        type: StringConstructor;
        required: true;
    };
    placeholder: {
        type: StringConstructor;
    };
    required: {
        type: BooleanConstructor;
        default: boolean;
    };
    collapsed: {
        type: BooleanConstructor;
        default: boolean;
    };
    xvalue: {
        type: StringConstructor;
    };
    disabled: {
        type: BooleanConstructor;
        default: boolean;
    };
}>> & {
    onInput?: ((...args: any[]) => any) | undefined;
}, {
    type: string;
    disabled: boolean;
    required: boolean;
    collapsed: boolean;
}, {}>;
export default _default;
