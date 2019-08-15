<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="">
                    <el-form  v-on:submit.prevent="console.log(form)"  class="text-center" ref="form" :model="form" label-width="120px">
                        <h1>loggin</h1>
                        <el-form-item label="Correo">
                            <el-input v-model="form.correo"></el-input>
                        </el-form-item>

                        <el-form-item label="Contraseña">
                            <el-input v-model="form.contra"></el-input>
                        </el-form-item>

                        <el-form-item>
                            <el-button type="primary" @click="onSubmit(form)">Create</el-button>
                            <el-button>Cancel</el-button>
                        </el-form-item>
                    </el-form>
                </div>
            </div>
        </div>
       
    </div>
</template>

<script>

    import axios from 'axios';

    export default {
        data() {
        return {
            form: {
                correo: '',
                contra: ''
            }
        }
    },
    methods: {
      onSubmit(data) {
    console.log(data);
        axios.get('/logginBeneficiario', data).then(res => {
            console.log(res);
        }).catch(e => {
            console.log(e);
        });
      }
    }
  }
</script>
