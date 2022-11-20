<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                       <button @click="alt()">alert</button>
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in todosList" :key="index">
                                    <td>{{ item.id }}</td>
                                    <td>{{ item.name }}</td>
                                    <td>{{ item.email }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script >
export default {
    methods: {
        alt(){
            alert('asdasd')
        }

    },
    mounted() {
        this.fetch()
    }
}
</script>
