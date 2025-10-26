<template>
    <tr>
      <td>
        <a class="text-xs whitespace-nowrap" :href="this.item.path">{{ this.item.path }}</a>
      </td>
      <td>
      </td>
    </tr>
  </template>
  <script>
  export default {
    props: ["item"],
  };
  </script>
  