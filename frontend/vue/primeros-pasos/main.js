const mv = new Vue({
    el: '#app',
    data: {
        formType: true,
        options: [
            { id: null, name: 'Seleccionar' },
            { id: 1, name: 'PHP' },
            { id: 2, name: 'JavaScript' },
            { id: 3, name: 'Java' },
            { id: 4, name: 'Go' }
        ],
        msg: {
            name: '',
            phone: '',
            email: '',
            comment: '',
            response: ''
        },
        formats: {
            name: '',
            email: ''
        },
        response: false
    },
    computed: {
        formTitle() {
            return this.formType ? 'A' : 'B'
        }
    }
})