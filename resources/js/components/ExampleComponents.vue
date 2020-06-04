<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task form</div>

                    <div class="card-body">
                        
                         <form action="./api/task" method="POST">
                            <div class="form-group">
                                <input type="text" name="title" placeholder="Task Title" class="form-control">
                            </div>
                             <div class="form-group">
                                <input type="submit" value="Add Task"   class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'ExampleComponent',
        mounted() {
            console.log('Component mounted.')
        },

         
    }
    
</script>
