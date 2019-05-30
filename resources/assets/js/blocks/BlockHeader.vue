<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-textfield" :attributes="{ label: 'Title', name: fieldName('title'), type: 'text', required: true, inStore: 'value' }" ></a17-locale><a17-locale type="a17-textfield" :attributes="{ label: 'Subtitle', name: fieldName('subtitle'), type: 'text', required: true, inStore: 'value' }" ></a17-locale>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
