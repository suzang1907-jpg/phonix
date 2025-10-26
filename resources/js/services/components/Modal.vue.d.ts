declare const _default: __VLS_WithTemplateSlots<import("vue").DefineComponent<{
    open: {
        type: BooleanConstructor;
        default: boolean;
    };
}, {}, unknown, {}, {
    onClose: () => void;
}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    onclose: (...args: any[]) => void;
}, string, import("vue").PublicProps, Readonly<import("vue").ExtractPropTypes<{
    open: {
        type: BooleanConstructor;
        default: boolean;
    };
}>> & {
    onOnclose?: ((...args: any[]) => any) | undefined;
}, {
    open: boolean;
}, {}>, {
    default?(_: {}): any;
}>;
export default _default;
type __VLS_WithTemplateSlots<T, S> = T & {
    new (): {
        $slots: S;
    };
};
