@extends('layout')

@section('content')
<div class="row first-row">
    <div class="well well-small">
      <form action="" style="display: inline;" @submit.prevent="addUsers">
        <div class="row">
          <div class="span10">
            <input type="text" class="input-block-level" placeholder="Tambah Programmer" v-model="user">
          </div>
          <div class="span2">
            <button class="btn btn-primary btn-block">Tambah</button>
          </div>
      </div>
      </form>
    </div>
</div>

<div class="row" v-for="(u, index) in users">
    <div class="well well-small">
      <div class="row">
        <div class="span6">
          <h4>@{{ u.name }}</h4>
          <hr class="content">
          <p>@{{ u.skills }}</p>
        </div>
        
        <div class="span6">
          <form action="post" @submit.prevent="addSkill(u.id, index)">
              <div class="row">
                  <div class="span4">
                    <input type="text" class="input-block-level" placeholder="Tambah Skill" v-model="skill[index]">
                  </div>
                  <div class="span2">
                    <button class="btn btn-primary btn-block">Tambah</button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection

@push('script')
<script type="text/javascript">
    var obj = new Vue({
        el : "#app",
        data(){
            return {
                users: [],
                user: "",
                skill: {
                    
                },
            }
        },

        mounted(){
            this.initialized();
        },

        methods: {
            initialized(){
                axios.get("{{ url('api/users') }}")
                .then(r => {
                    this.users = r.data.users;
                })
            },

            addUsers(){
                axios.post("{{ url('api/users') }}", {
                    name: this.user
                })
                .then( r => {
                    this.initialized();
                    this.user = "";
                })
            },

            addSkill(id, index){
                axios.post("{{ url('api/skill') }}/"+id, {
                    name: this.skill[index]
                })
                .then( r => {
                    this.initialized();
                    this.skill[index] = "";
                })

                // console.log(id + " " + this.skill[index]);
            }
        }
    })
</script>
@endpush

<!-- function initialized(){
        $.get("{{ url('api') }}/users", function(response){
            let body = "";
            $.each(response.data, function(index, data) {

            body += `
                <div class="row">
                    <div class="well well-small">
                      <div class="row">
                        <div class="span6">
                          <h4>`+data.name+`</h4>
                          <hr class="content">
                          <p>`+data.skills+`</p>
                        </div>
                        
                        <div class="span6">
                          <form action="post" class="submitSkill">
                              <div class="row">
                                  <div class="span4">
                                    <input type="text" class="input-block-level" placeholder="Tambah Skill">
                                  </div>
                                  <div class="span2">
                                    <button class="btn btn-primary btn-block">Tambah</button>
                                  </div>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>`;
            }); 

            $(".content").html(body);
            body = "";
        });
    }

    $(function(){
        initialized();

        $("#f-users").submit(function(event) {
            event.preventDefault();
            $.post('{{ url("api") }}/users', $(this).serializeArray(), function(data, textStatus, xhr) {
                console.log("success");
                initialized();
                $(this).find("#name_user").val("");
            });
        });

        $(".content").on("submit",".submitSkill", function(e){
            e.preventDefault();
            alert("submitted");
        })
    }); -->