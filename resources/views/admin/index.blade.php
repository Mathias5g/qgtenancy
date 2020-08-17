@extends('layout.site')
@section('title', 'Home - QG')
@section('cssheader')
@endsection
@section('scriptsheader')
<script>
    $(function() {
        $("#tabs").tabs();
    });
</script>
@endsection

@section('content')
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Membros</a></li>
            <li><a href="#tabs-2">Configurações do Grupo</a></li>
            <div id="tabs-1">
                <div id="app"></div>
            </div>
            <div id="tabs-2">
                <input type="text" required>
            </div>
            <div id="tabs-3">
                <button>ENVIAR</button>
            </div>
        </ul>
    </div>
@endsection
@section('scriptsfooter')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    new Vue({
        el: '#app',
        template: `
            <h1>Todos os usuários</h1>
            <div v-for="user in users">
                <p></p>
                <button>Delete</button>
                <button>Editar</button>
            </div>
        `,
        data() {
            return {
                users: [
                {
                    name: 'Leandro'
                }
                ],
            }
        }
    })
</script>
@endsection
