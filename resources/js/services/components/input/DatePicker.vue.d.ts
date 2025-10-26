declare const _default: import("vue").DefineComponent<{
    xdate: {
        type: DateConstructor;
    };
}, {}, {
    year: number;
    month: number;
    day: number;
    date: Date;
}, {}, {
    onClickDay: () => void;
    setDate: (date: any) => void;
    getCountOfDays: (_month?: number | null, _year?: number | null) => number;
    isSelected: (_day: number) => boolean;
    setDay: (_day: number) => void;
    calculateDate: () => void;
}, import("vue").ComponentOptionsMixin, import("vue").ComponentOptionsMixin, {
    onchange: (...args: any[]) => void;
    onday: (...args: any[]) => void;
}, string, import("vue").PublicProps, Readonly<import("vue").ExtractPropTypes<{
    xdate: {
        type: DateConstructor;
    };
}>> & {
    onOnchange?: ((...args: any[]) => any) | undefined;
    onOnday?: ((...args: any[]) => any) | undefined;
}, {}, {}>;
export default _default;
