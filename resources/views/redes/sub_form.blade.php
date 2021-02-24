<div class="mb-3">
    
    <div class="radio">
        <label>
          <input type="radio" name="label" id="label" value="{{ old('label', $red->label ?? "GITHUB") }}" >
          GITHUB
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="label" id="label" value="{{ old('label', $red->label ?? "TWITTER") }}">
          TWITTER
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="label" id="label" value="{{ old('label', $red->label ?? "FACEBOOK") }}">
          FACEBOOK
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="label" id="label" value="{{ old('label', $red->label ?? "INSTAGRAM") }}">
          INSTAGRAM
        </label>
      </div>
</div>
<div class="mb-3">
    <label for="url" class="form-label">Enlace</label>
    <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $link->url ?? "") }}">
</div>  
