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
        required: false;
        type: {
            (arrayLength: number): String[];
            (...items: String[]): String[];
            new (arrayLength: number): String[];
            new (...items: String[]): String[];
            isArray(arg: any): arg is any[];
            readonly prototype: any[];
            from<T>(arrayLike: ArrayLike<T>): T[];
            from<T_1, U>(arrayLike: ArrayLike<T_1>, mapfn: (v: T_1, k: number) => U, thisArg?: any): U[];
            from<T_2>(iterable: Iterable<T_2> | ArrayLike<T_2>): T_2[];
            from<T_3, U_1>(iterable: Iterable<T_3> | ArrayLike<T_3>, mapfn: (v: T_3, k: number) => U_1, thisArg?: any): U_1[];
            of<T_4>(...items: T_4[]): T_4[];
            readonly [Symbol.species]: ArrayConstructor;
        };
    };
    disabled: {
        type: BooleanConstructor;
        default: boolean;
    };
}, {}, {
    value: String[];
    vinput: string;
}, {}, {
    onInput: (event: any) => void;
    add: () => void;
    remove: (index: any) => void;
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
        required: false;
        type: {
            (arrayLength: number): String[];
            (...items: String[]): String[];
            new (arrayLength: number): String[];
            new (...items: String[]): String[];
            isArray(arg: any): arg is any[];
            readonly prototype: any[];
            from<T>(arrayLike: ArrayLike<T>): T[];
            from<T_1, U>(arrayLike: ArrayLike<T_1>, mapfn: (v: T_1, k: number) => U, thisArg?: any): U[];
            from<T_2>(iterable: Iterable<T_2> | ArrayLike<T_2>): T_2[];
            from<T_3, U_1>(iterable: Iterable<T_3> | ArrayLike<T_3>, mapfn: (v: T_3, k: number) => U_1, thisArg?: any): U_1[];
            of<T_4>(...items: T_4[]): T_4[];
            readonly [Symbol.species]: ArrayConstructor;
        };
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
