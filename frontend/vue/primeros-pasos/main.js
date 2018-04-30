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
        },
        existsErrorMsg() {
            if (this.msg.name !== '') {
                return this.msg.name
            }
            if (this.msg.phone !== '') {
                return this.msg.phone
            }
            if (this.msg.email !== '') {
                return this.msg.email
            }
            if (this.msg.comment !== '') {
                return this.msg.comment
            }
            return ''
        }
    },
    methods: {
        validateData(evt) {
            let input = evt.target,
                expression

            if (input.pattern) {
                let regex = new RegExp(input.pattern)
                expression = !regex.exec(input.value)
            } else {
                expression = !input.value
            }

            this.msg[input.name] = expression ? `Dato incorrecto, ${input.title}` : ``
        },
        sendForm(evt) {

        }
    }
})