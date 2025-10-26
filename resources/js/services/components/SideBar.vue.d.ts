declare const _default: __VLS_WithTemplateSlots<import("vue").DefineComponent<{
    open: {
        type: BooleanConstructor;
    };
}, {}, unknown, {}, {
    handleResize: () => void;
    openSideBar: () => void;
    closeSideBar: () => void;
}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {}, string, import("vue").PublicProps, Readonly<import("vue").ExtractPropTypes<{
    open: {
        type: BooleanConstructor;
    };
}>>, {
    open: boolean;
}, {}>, {
    leading?(_: {}): any;
    default?(_: {}): any;
}>;
export default _default;
type __VLS_WithTemplateSlots<T, S> = T & {
    new (): {
        $slots: S;
    };
};
