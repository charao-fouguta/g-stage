<template>
    <div>
        <input type="file" name="video" accept="video/mp4"
            @change="changeFile"
        >

        <video :src="video" controls loop autoplay muted class="mt-2" style="max-height: 300px; max-width: 300px;"></video>
    </div>
</template>

<script>
export default {
    props: ['oldVideo'],
    data() {
        return {
            video: '',
        }
    },
    methods: {
        changeFile(event) {
            var file = null;
            file = event.target.files[0]; 
            var reader = new FileReader(); 

            reader.readAsDataURL(file); 

            reader.onload = function () {
                this.video = reader.result; 
            }.bind(this);
        },
    },
    mounted() {
        if(this.oldVideo) {
            this.video = this.oldVideo;
        }
    }
}
</script>

<style>

</style>