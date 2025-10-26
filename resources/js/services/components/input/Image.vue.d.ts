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
    accept: {
        type: StringConstructor;
        default: string;
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
    onSelect(event: any): void;
}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    onselect: (...args: any[]) => void;
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
    accept: {
        type: StringConstructor;
        default: string;
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
    onOnselect?: ((...args: any[]) => any) | undefined;
}, {
    type: string;
    disabled: boolean;
    required: boolean;
    collapsed: boolean;
    accept: string;
}, {}>;
export default _default;
