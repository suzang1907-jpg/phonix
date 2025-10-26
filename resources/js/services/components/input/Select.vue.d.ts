declare const _default: __VLS_WithTemplateSlots<import("vue").DefineComponent<{
    hint: {};
    error: {};
    id: {
        type: StringConstructor;
    };
    name: {
        type: StringConstructor;
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
    onChange: (event: any) => void;
}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    onchange: (...args: any[]) => void;
}, string, import("vue").PublicProps, Readonly<import("vue").ExtractPropTypes<{
    hint: {};
    error: {};
    id: {
        type: StringConstructor;
    };
    name: {
        type: StringConstructor;
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
    onOnchange?: ((...args: any[]) => any) | undefined;
}, {
    disabled: boolean;
    required: boolean;
    collapsed: boolean;
}, {}>, {
    default?(_: {}): any;
}>;
export default _default;
type __VLS_WithTemplateSlots<T, S> = T & {
    new (): {
        $slots: S;
    };
};
