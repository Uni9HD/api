<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de CEP e ClimaTempo</title>
</head>
<body>
    <h1>API`s de Consulta de CEP, ClimaTempo e Ações</h1>

    <!-- Link para a documentação do Swagger -->
    <a href="http://localhost:3000/documentation/index.php" target="_blank">Documentação Swagger</a>

    <!-- Linha de separação -->
    <hr>

    <h1>Consulta de CEP</h1>
    <form id="cepForm">
        <label for="cepInput">CEP:</label>
        <input type="text" id="cepInput" placeholder="Digite o CEP" required>
        <button type="submit">Consultar CEP</button>
    </form>

    <div id="cepResult">

    </div>

    <h1>Consulta de ClimaTempo</h1>
    <form id="climaForm">
        <label for="latInput">Latitude:</label>
        <input type="text" id="latInput" placeholder="Digite a Latitude" required>
        <label for="lonInput">Longitude:</label>
        <input type="text" id="lonInput" placeholder="Digite a Longitude" required>
        <button type="submit">Consultar ClimaTempo</button>
    </form>

    <div id="climaResult">



        

    </div>


    <h1>Consulta de Ações na Bolsa de Valores</h1>
    <form id="stockForm">
        <label for="stockSelect">Selecione a Ação:</label>
        <select id="stockSelect" required>
            <option value="RRRP3">RRRP3 - 3R PETROLEUM</option>
            <option value="ALSO3">ALSO3 - ALIANSCSONAE</option>
            <option value="ALPA4">ALPA4 - ALPARGATAS</option>
            <option value="ABEV3">ABEV3 - AMBEV S/A</option>
            <option value="ARZZ3">ARZZ3 - AREZZO CO</option>
            <option value="ASAI3">ASAI3 - ASSAI</option>
            <option value="AZUL4">AZUL4 - AZUL</option>
            <option value="B3SA3">B3SA3 - B3</option>
            <option value="BBSE3">BBSE3 - BBSEGURIDADE</option>
            <option value="BBDC3">BBDC3 - BRADESCO</option>
            <option value="BBDC4">BBDC4 - BRADESCO</option>
            <option value="BRAP4">BRAP4 - BRADESPAR</option>
            <option value="BBAS3">BBAS3 - BRASIL</option>
            <option value="BRKM5">BRKM5 - BRASKEM</option>
            <option value="BRFS3">BRFS3 - BRF SA</option>
            <option value="BPAC11">BPAC11 - BTGP BANCO</option>
            <option value="CRFB3">CRFB3 - CARREFOUR BR</option>
            <option value="BHIA3">BHIA3 - CASAS BAHIA</option>
            <option value="CCRO3">CCRO3 - CCR SA</option>
            <option value="CMIG4">CMIG4 - CEMIG</option>
            <option value="CIEL3">CIEL3 - CIELO</option>
            <option value="COGN3">COGN3 - COGNA ON</option>
            <option value="CPLE6">CPLE6 - COPEL</option>
            <option value="CSAN3">CSAN3 - COSAN</option>
            <option value="CPFE3">CPFE3 - CPFL ENERGIA</option>
            <option value="CMIN3">CMIN3 - CSNMINERACAO</option>
            <option value="CVCB3">CVCB3 - CVC BRASIL</option>
            <option value="CYRE3">CYRE3 - CYRELA REALT</option>
            <option value="DXCO3">DXCO3 - DEXCO</option>
            <option value="ELET3">ELET3 - ELETROBRAS</option>
            <option value="ELET6">ELET6 - ELETROBRAS</option>
            <option value="EMBR3">EMBR3 - EMBRAER</option>
            <option value="ENGI11">ENGI11 - ENERGISA</option>
            <option value="ENEV3">ENEV3 - ENEVA</option>
            <option value="EGIE3">EGIE3 - ENGIE BRASIL</option>
            <option value="EQTL3">EQTL3 - EQUATORIAL</option>
            <option value="EZTC3">EZTC3 - EZTEC</option>
            <option value="FLRY3">FLRY3 - FLEURY</option>
            <option value="GGBR4">GGBR4 - GERDAU</option>
            <option value="GOAU4">GOAU4 - GERDAU MET</option>
            <option value="GOLL4">GOLL4 - GOL</option>
            <option value="NTCO3">NTCO3 - GRUPO NATURA</option>
            <option value="SOMA3">SOMA3 - GRUPO SOMA</option>
            <option value="HAPV3">HAPV3 - HAPVIDA</option>
            <option value="HYPE3">HYPE3 - HYPERA</option>
            <option value="IGTI11">IGTI11 - IGUATEMI S.A</option>
            <option value="IRBR3">IRBR3 - IRBBRASIL RE</option>
            <option value="ITSA4">ITSA4 - ITAUSA</option>
            <option value="ITUB4">ITUB4 - ITAUUNIBANCO</option>
            <option value="JBSS3">JBSS3 - JBS</option>
            <option value="KLBN11">KLBN11 - KLABIN S/A</option>
            <option value="RENT3">RENT3 - LOCALIZA</option>
            <option value="LWSA3">LWSA3 - LOCAWEB</option>
            <option value="LREN3">LREN3 - LOJAS RENNER</option>
            <option value="MGLU3">MGLU3 - MAGAZ LUIZA</option>
            <option value="MRFG3">MRFG3 - MARFRIG</option>
            <option value="BEEF3">BEEF3 - MINERVA</option>
            <option value="MRVE3">MRVE3 - MRV</option>
            <option value="MULT3">MULT3 - MULTIPLAN</option>
            <option value="PCAR3">PCAR3 - P.ACUCAR-CBD</option>
            <option value="PETR3">PETR3 - PETROBRAS</option>
            <option value="PETR4">PETR4 - PETROBRAS</option>
            <option value="RECV3">RECV3 - PETRORECSA</option>
            <option value="PRIO3">PRIO3 - PETRORIO</option>
            <option value="PETZ3">PETZ3 - PETZ</option>
            <option value="RADL3">RADL3 - RAIADROGASIL</option>
            <option value="RAIZ4">RAIZ4 - RAIZEN</option>
            <option value="RDOR3">RDOR3 - REDE D OR</option>
            <option value="RAIL3">RAIL3 - RUMO S.A.</option>
            <option value="SBSP3">SBSP3 - SABESP</option>
            <option value="SANB11">SANB11 - SANTANDER BR</option>
            <option value="SMTO3">SMTO3 - SAO MARTINHO</option>
            <option value="CSNA3">CSNA3 - SID NACIONAL</option>
            <option value="SLCE3">SLCE3 - SLC AGRICOLA</option>
            <option value="SUZB3">SUZB3 - SUZANO S.A.</option>
            <option value="TAEE11">TAEE11 - TAESA</option>
            <option value="VIVT3">VIVT3 - TELEF BRASIL</option>
            <option value="TIMS3">TIMS3 - TIM</option>
            <option value="TOTS3">TOTS3 - TOTVS</option>
            <option value="UGPA3">UGPA3 - ULTRAPAR</option>
            <option value="USIM5">USIM5 - USIMINAS</option>
            <option value="VALE3">VALE3 - VALE</option>
            <option value="VAMO3">VAMO3 - VAMOS</option>
            <option value="VBBR3">VBBR3 - VIBRA</option>
            <option value="WEGE3">WEGE3 - WEG</option>
            <option value="YDUQ3">YDUQ3 - YDUQS PART</option>
            
        </select>
    <button type="submit">Consultar Ação</button>
</form>
    
    <div id="stockResult">
        <!--
        <h2>Resultado Ação</h2>
         
        <p><strong>Information:</strong> <span id="Information"></span></p>
        <p><span id="Preços de Fechamento dos Últimos 5 Dias"></span></p>-->
    </div>

    <script src="web/js/script.js"></script>
</body>
</html>