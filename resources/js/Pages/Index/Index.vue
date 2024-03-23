<template>

<MainLayout>
    <div>Index</div>
    <Link href="/hello">
      Show Page
    </Link>
    <div>
      The message is {{ message }}
    </div>
</MainLayout>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/inertia-vue3'
  defineProps({ message: String })
  </script>
