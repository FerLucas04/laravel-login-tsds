<div class="mb-3">
    <label for="nombre" class="form-label">Nombre de la Tarea</label>
    <input type="text" name="nombre" id="nombre" class="form-control" 
           value="{{ old('nombre', isset($tarea) ? $tarea->nombre : '') }}" required>

    @error('nombre')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
