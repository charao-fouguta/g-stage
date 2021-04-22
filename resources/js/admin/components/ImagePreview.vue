<template>
    <div> 
        <input type="file" name="image" accept="image/png, image/jpg, image/jpeg"
            @change="changeFile"
        >
        <br>
        <img :src="image" style="max-height: 150px; max-width: 180px;" class="mt-2">
    </div>
</template>

<script>
export default {
    props: ['oldImage'],
    data() {
        return {
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
        },
    },
    mounted() {
        if(this.oldImage) {
            this.image = this.oldImage;
        }
    }
}
</script>

<style>

</style>