  <div class="card">
            <div class="card-header">
                {{ $formula->nombre }}
            </div>
            <div class="card-body">
                @if($showExtra)
                    <div class="formula-row">
                        <div class="formula-col">
                            <img src="{{ public_path($latexImg) }}" class="formula-image" alt="Fórmula">
                        </div>
                        <div class="formula-col">
                            @if($formula->imagen && $formula->imagen->url)
                                @php
                                    $imagePath = storage_path('app\\public\\'.$formula->imagen->url);
                                    $imageData = base64_encode(file_get_contents($imagePath));
                                @endphp
                                <img src="data:image/jpeg;base64,{{ $imageData }}" class="extra-image">
                            @endif
                        </div>
                    </div>
                @else
                    <div class="formula-single">
                        <img src="{{ public_path($latexImg) }}" class="formula-image" alt="Fórmula">
                    </div>
                @endif
            </div>
        </div>