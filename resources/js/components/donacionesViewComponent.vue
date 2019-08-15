<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">
                    <h1>{{props}}
                    </h1>
                    <el-form  v-on:submit.prevent="console.log(form)"  class="text-center" ref="form" :model="form" label-width="120px">
    <el-table
      :data="tableData"
      style="width: 100%">
      <el-table-column
        prop="donador"
        label="donador"
        width="180">
      </el-table-column>
      <el-table-column
        prop="monto"
        label="monto"
        width="180">
      </el-table-column>
      <el-table-column
        prop="created_at"
        label="created_at">
      </el-table-column>
    </el-table>

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
        
            axios.post('/getDonaciones', 1).then(data =>{

                console.log(data.data)
                this.tableData = data.data;
                
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
