<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="">
                    <el-form  v-on:submit.prevent="console.log(form)"  class="text-center" ref="form" :model="form" label-width="120px">
                        <el-form-item label="Correo">
                            <el-input v-model="form.correo"></el-input>
                        </el-form-item>
                        
                        <el-select v-model="form.usuario" placeholder="Select">
                            <el-option
                                v-for="item in form"
                                    :key="item"
                                    :label="item"
                                    :value="item">
                            </el-option>
                        </el-select>

                        <el-form-item label="Contraseña">
                            <el-input v-model="form.contra" type="password"></el-input>
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
                correo: '1',
                contra: '2'
            }
        }
    },
    methods: {
      onSubmit(data) {
        console.log(data);
        axios.post('/loggin', data).then(response => {
            console.log(response.data);
            data = response.data;
            if(data == 1){
               localStorage.setItem('key', data);
            }else{
                alert('Datos incorrectos favor de ingresar bien los campos');
            }
        }).catch(e => {
            console.log(e);
        });
      }
    }
  }

</script>
