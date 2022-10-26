<template>
  <div>
    <h2>Welcome</h2>
    <button @click="counter++">Click me {{counter}}</button>
  </div>
</template>

<script>
export default {
  name: "App",
  data: () => ({
    counter: 0
  })
}
</script>

<style scoped>

</style>