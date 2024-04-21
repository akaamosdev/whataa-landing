<script setup>
import MagnificPopup from 'magnific-popup';
import {ref, onMounted} from "vue";
const isVideoPopupOpen = ref(false);
const videoUrl = ref('https://www.youtube.com/embed/VIDEO_ID'); // Replace with your YouTube video ID

const openVideoPopup = () => {
    isVideoPopupOpen.value = true;
    MagnificPopup.open({
        items: {
            src: videoUrl.value,
            type: 'iframe'
        },
        modal: true // Optional: Set modal behavior
    });
};

const closeVideoPopup = () => {
    isVideoPopupOpen.value = false;
    MagnificPopup.close();
};


onMounted(()=>{
    MagnificPopup.init();
})
</script>

<template>
    <img src="images/about-video.jpg" alt="about-video" />
    <div class="video-overlay gradiant-background"></div>
    <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="video-overlay-trigger" data-effect="mfp-3d-unfold"><i class="fa fa-play"></i></a>
</template>
