declare const _default: import("vue").DefineComponent<{
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
        type: DateConstructor;
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
        type: DateConstructor;
    };
    modal: {};
    picker: {};
}, {}, {
    value: Date | undefined;
    modalIsOpen: boolean;
}, {}, {
    openModal: () => void;
    closeModal: () => void;
    onChange: (event: any) => void;
    dateToString: (date?: Date) => string | undefined;
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
        type: DateConstructor;
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
        type: DateConstructor;
    };
    modal: {};
    picker: {};
}>> & {
    onOnchange?: ((...args: any[]) => any) | undefined;
}, {
    required: boolean;
    collapsed: boolean;
}, {}>;
export default _default;
