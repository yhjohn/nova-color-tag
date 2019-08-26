<template>
    <div class="ct-round-small mr-2" >
        <div class="inner" :style="{ 'background-color': field.value }" ></div>
    </div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
