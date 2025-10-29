const ampRules = () => {
  return {
    postcssPlugin: 'amp-rules',
    AtRule: {
      layer: (rule) => {
        rule.replaceWith(rule.nodes);
      }
    }
  };
};

export default ampRules;