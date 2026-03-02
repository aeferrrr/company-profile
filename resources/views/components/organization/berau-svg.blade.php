<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 420" class="img-fluid w-100 shadow-sm rounded p-3">
    <!-- Connector Lines -->
    <g class="connector-group">
        <!-- Garis Atas (Project Director ke Cabang) -->
        <line x1="600" y1="90" x2="600" y2="130" class="chart-line" />
        <line x1="200" y1="130" x2="1000" y2="130" class="chart-line" />

        <!-- Garis ke Departemen Level 1 -->
        <line x1="200" y1="130" x2="200" y2="160" class="chart-line" />
        <line x1="400" y1="130" x2="400" y2="160" class="chart-line" />
        <line x1="600" y1="130" x2="600" y2="160" class="chart-line" />
        <line x1="800" y1="130" x2="800" y2="160" class="chart-line" />
        <line x1="1000" y1="130" x2="1000" y2="160" class="chart-line" />
    </g>

    <!-- NODE GROUPS -->

    <!-- Project Director -->
    <g class="node-group" transform="translate(510, 30)">
        <rect width="180" height="60" class="chart-rect" />
        <text x="90" y="30" class="chart-text">Project Director</text>
    </g>

    <!-- Architect Engineering -->
    <g class="node-group" transform="translate(110, 160)">
        <rect width="180" height="60" class="chart-rect" />
        <text x="90" y="22" class="chart-text">Architect Engineering</text>
        <text x="90" y="42" class="chart-text" style="font-size: 11px; font-weight: 400; opacity: 0.8;">Design/Drawing</text>
    </g>

    <!-- Safety Control -->
    <g class="node-group" transform="translate(310, 160)">
        <rect width="180" height="60" class="chart-rect" />
        <text x="90" y="22" class="chart-text">Safety Control</text>
        <text x="90" y="42" class="chart-text" style="font-size: 11px; font-weight: 400; opacity: 0.8;">QA/QC</text>
    </g>

    <!-- Batching Plant -->
    <g class="node-group" transform="translate(510, 160)">
        <rect width="180" height="60" class="chart-rect" />
        <text x="90" y="22" class="chart-text">Batching Plant</text>
        <text x="90" y="42" class="chart-text" style="font-size: 11px; font-weight: 400; opacity: 0.8;">M/E/O</text>
    </g>

    <!-- Administration -->
    <g class="node-group" transform="translate(710, 160)">
        <rect width="180" height="60" class="chart-rect" />
        <text x="90" y="22" class="chart-text">Administration</text>
        <text x="90" y="42" class="chart-text" style="font-size: 11px; font-weight: 400; opacity: 0.8;">CS P</text>
    </g>

    <!-- Workshop (Posisi di Level 1 seperti Marketing di Office) -->
    <g class="node-group" transform="translate(910, 160)">
        <rect width="180" height="60" class="chart-rect" />
        <text x="90" y="30" class="chart-text">Workshop</text>
    </g>

</svg>