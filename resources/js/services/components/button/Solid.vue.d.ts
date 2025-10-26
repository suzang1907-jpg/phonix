declare const _default: __VLS_WithTemplateSlots<import("vue").DefineComponent<{
    type: {
        type: StringConstructor;
        default: undefined;
    };
    disabled: {
        type: BooleanConstructor;
        default: boolean;
    };
}, {}, unknown, {}, {
    onClick: () => void;
}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    onclick: (...args: any[]) => void;
}, string, import("vue").PublicProps, Readonly<import("vue").ExtractPropTypes<{
    type: {
        type: StringConstructor;
        default: undefined;
    };
    disabled: {
        type: BooleanConstructor;
        default: boolean;
    };
}>> & {
    onOnclick?: ((...args: any[]) => any) | undefined;
}, {
    type: string;
    disabled: boolean;
}, {}>, {
    default?(_: {}): any;
}>;
export default _default;

type __VLS_WithTemplateSlots<T, S> = T & {
    new (): {
        $slots: S;
    };
};
