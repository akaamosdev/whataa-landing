<script setup>

import InputError from "@/Components/InputError.vue";
import {useForm, Head} from "@inertiajs/vue3";
import NavHead from "@/Layouts/LayoutCustomers/NavHead.vue";
const form = useForm({
    name: null,
    email: null,
    phone: null,
});
const submit = () => {
    form.post(route('downlaod.send'), {
        //  onFinish: () => form.reset('name', 'email','phone','subject','message'),
        onSuccess:function (e) {
            window.location.href="/assets/docs/whataa.zip"
        },
        // onError:function (){
        //     form.setError({
        //         name:"Le champs nom est obligatoire",
        //         email:"Le champs email est obligatoire",
        //         phone:"Le champs phone est obligatoire",
        //     })
        // },
        preserveScroll:true,
    });
};

</script>

<template>
    <Head title="Formulaire de téléchargement de whataa" />
    <NavHead />
    <div id="" class="contact-section section gradiant-background pb-90"
         style="height: 100vh; align-items: center; justify-content: center">

        <div class="container" style="padding-top: 20vh; ">

            <div class="row text-center justify-content-center">
                <div class="col-md-6 col-md-offset-3">
                    <div class="contact-form white-bg text-center" style="margin-top: 8vh">
                        <h3>Téléchargement</h3>
                        <form @submit.prevent="submit"  class="form-message">
                            <div class="form-results"></div>
                            <div class="form-group row fix-gutter-10 ">
                                <div class="form-field col-sm-12 gutter-10 form-m-bttm">
                                    <input name="contact-name" type="text" v-model="form.name" placeholder="Votre nom *" class="form-control required">
                                    <InputError class="mt-2" :message="form.errors.name" />
                                </div>
                                <div class="form-field col-sm-12 gutter-10 " style="margin-top: 12px">
                                    <input name="contact-email" type="email" v-model="form.email" placeholder="Email *" class="form-control required email">
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>
                                <div class="form-field col-md-12 gutter-10 form-m-bttm" style="margin-top: 12px">
                                    <input name="contact-phone" type="text" v-model="form.phone" placeholder="Téléphone *" class="form-control required">
                                    <InputError class="mt-2" :message="form.errors.phone" />
                                </div>
                            </div>
                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                {{ form.progress.percentage }}%
                            </progress>
                            <button type="submit" class="button solid-btn sb-h" :disabled="form.processing" preserve-scroll>Télécharger maintenant</button>
                        </form>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .container  -->
    </div><!-- .contact-section  -->
</template>
