Nova.booting((Vue, router, store) => {
    Vue.component('index-color-tag', require('./components/IndexField'))
    Vue.component('detail-color-tag', require('./components/DetailField'))
    Vue.component('form-color-tag', require('./components/FormField'))
})
