<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputError from "@/Components/InputError.vue";
import {ref} from "vue";

const messageCust= ref("");
const form = useForm({
    name: null,
    email: null,
    phone: null,
    subject: null,
    message: null,
});
const submit = () => {
    form.post(route('contact'), {
        preserveScroll:true,
        onSuccess: function (e) {
            messageCust.value="Message envoyé avec succès";
            form.reset('name', 'email','phone','subject','message');
        }
    });
};
</script>

<template>
    <div id="contacts" class="contact-section section gradiant-background pb-90">
        <div class="container">
            <div class="section-head heading-light text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading heading-light">Contactez nous</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form white-bg text-center">
                        <h3>Laissez-nous un message</h3>
                        <p>Merci de nous laisser votre message nous vous repondons dans un délai de 6h.</p>
                        <p class="alert alert-success" v-if="messageCust">{{ messageCust }}</p>
                        <form @submit.prevent="submit"  class="form-message">
                            <div class="form-results"></div>
                            <div class="form-group row fix-gutter-10">
                                <div class="form-field col-sm-6 gutter-10 form-m-bttm">
                                    <input name="contact-name" type="text" v-model="form.name" placeholder="Votre nom" class="form-control required">
                                    <InputError class="mt-2" :message="form.errors.name" />
                                </div>
                                <div class="form-field col-sm-6 gutter-10">
                                    <input name="contact-email" type="email" v-model="form.email" placeholder="Email *" class="form-control required email">
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>
                            </div>
                            <div class="form-group row fix-gutter-10">
                                <div class="form-field col-md-6 gutter-10 form-m-bttm">
                                    <input name="contact-phone" type="text" v-model="form.phone" placeholder="Téléphone *" class="form-control required">
                                    <InputError class="mt-2" :message="form.errors.phone" />
                                </div>
                                <div class="form-field col-md-6 gutter-10">
                                    <input name="contact-subject" type="text" v-model="form.subject" placeholder="Sujet *" class="form-control required">
                                    <InputError class="mt-2" :message="form.errors.subject" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12">
                                    <textarea name="contact-message" v-model="form.message" placeholder="Messages *" class="txtarea form-control required"></textarea>
                                    <InputError class="mt-2" :message="form.errors.message" />
                                </div>
                            </div>
                            <input type="text" class="hidden" name="form-anti-honeypot" value="">
                            <button type="submit" class="button solid-btn sb-h" :disabled="form.processing" preserve-scroll>Envoyez</button>
                        </form>
                    </div>
                </div><!-- .col  -->
                <div class="col-md-6">
                    <div class="contact-info white-bg">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6><em class="fa fa-envelope"></em> hello@3af-technology.com </h6>
                                <h6><em class="fa fa-envelope"></em> amosaka55@gmail.com </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6><em class="fa fa-phone"></em> (+225) 05 5595 4533</h6>
                                <h6><a href="https://wa.me/message/JJCG5PFZDKA5I1" target="_blank"><em class="fa fa-whatsapp"></em> (+225) 07 8760 2132</a></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6><em class="fa fa-map-marker"></em>Yopougon Ananerais, Abidjan, Côte d'Ivoire</h6>
                            </div>
                        </div>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .container  -->
    </div><!-- .contact-section  -->
</template>
