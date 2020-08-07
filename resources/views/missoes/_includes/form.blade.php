<div class="details">
    <input type="text" name="title" placeholder="Título da Missão" required>
    <input type="file" name="image" accept="image/*">
    <select name="type" required>
        <option value="" selected disabled hidden>Selecione</option>
        <option value="Oficial">Oficial</option>
        <option value="4Fun">4Fun</option>
        <option value="Treinamentos">Treinamentos</option>
    </select>
    <input type="text" id="datetimepicker" name="start" required>
</div>
<textarea name="description" id="trumbowyg-demo" required></textarea>
<div class="slots">
    <div class="title-slots">
        <h2>Equipes e Membros</h2>
    </div>
    <input type="hidden" class="groups" name="groups" value="1">
</div>
<button type="button" id="addGroup">Adicionar Grupo</button>
