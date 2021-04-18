<template>
    <div>
        <input type="file" name="image"
            @change="changeFile"
        >

        <img :src="oldImage" style="max-height: 150px; max-width: 180px;" class="mt-2">
        <img v-if="drop" :src="image" style="max-height: 150px; max-width: 180px;" class="mt-2">
    </div>
</template>

<script>
export default {
    props: ['oldImage'],
    data() {
        return {
            drop: false,
            image: '',
        }
    },
    methods: {
        changeFile(event) {
            var file = null;
            file = event.target.files[0]; 
            var reader = new FileReader(); 

            reader.readAsDataURL(file); 

            reader.onload = function () {
                this.image = reader.result; 
            }.bind(this);
            this.oldImage = '';
            this.drop = true;
        },
    }
}
</script>

<style>

</style>