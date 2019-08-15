<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">
                    <el-form  v-on:submit.prevent="console.log(form)"  class="text-center" ref="form" :model="form" label-width="120px">

  <template>
    <el-table
      :data="tableData"
      style="width: 100%">
      <el-table-column
        prop="date"
        label="Fecha"
        width="180">
      </el-table-column>
      <el-table-column
        prop="name"
        label="Nombre"
        width="180">
      </el-table-column>
      <el-table-column
        prop="address"
        label="Dirección">
      </el-table-column>
    </el-table>
  </template>
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
            tableData: [

            ]
        }
    },
    mounted(){
            axios.get('/getDonaciones', 1).then(data =>{
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
