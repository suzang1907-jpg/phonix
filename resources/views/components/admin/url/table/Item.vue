<template>
    <tr>
      <td>
        <a class="text-xs whitespace-nowrap" :href="this.item.path">{{ this.item.path }}</a>
      </td>
      <td>
        <a class="text-xs whitespace-nowrap" v-if="this.item.target_path" :href="this.item.target_path">{{ this.item.target_path }}</a>
        <div class="text-xs whitespace-nowrap" v-if="!this.item.target_path">-</div>
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
  