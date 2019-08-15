<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="">
                    <el-form  v-on:submit.prevent="console.log(form)"  class="text-center" ref="form" :model="form" label-width="120px">

                        <el-form-item label="Donante">
                            <el-input v-model="form.donador"></el-input>
                        </el-form-item>

                        <el-form-item label="Beneficiario">
                            <el-select class="col-12 p-0" v-model="form.beneficiarios_id" lab placeholder="Select">
                                <el-option
                                    v-for="item in options"
                                        :key="item.id"
                                        :label="item.usuario"
                                        :value="item.id">
                                </el-option>
                            </el-select>
                        </el-form-item>

                        <el-form-item label="monto">
                            <el-input v-model="form.monto" type="number"></el-input>
                        </el-form-item>

                        <el-form-item>
                            <el-button type="primary" @click="onSubmit(form)">Donar</el-button>
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
                donador: '',
                beneficiarios_id: '',
                monto: ''
                
            },
            options: [

            ]
        }
    },
    mounted(){
            axios.get('/getBeneficiarios',).then(data =>{
                this.options = data.data;
            }).catch(e =>{
                console.log(e);
            })
    },
    methods: {
      onSubmit(data) {
            axios.post('/insertarDonacion', data).then(data =>{
                console.log('datos insertados'+data);
            }).catch(e =>{
                console.log(e);
            })
      }
    }
  }

</script>
