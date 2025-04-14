<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Locadora de veícolos</title>
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuario -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between alien-items-center inicio">
                    <h1>Locadora de Veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem vindo,(usuario) -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Usuário</strong>
                        </span>
                        <!-- botão de logout -->
                        <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1"><i class="bi bi-box-arrow-in-right"></i>Sair</a>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário para adicionar novos veiculos -->
        <div class="row same-height-row">
            <col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calculadora a previsão de aluguel
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="" class="input-label">Tipo de veículo:</label>
                                <select class="form-select" name="" id="" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                    <option value="carro">Helicoptero</option>
                                    <option value="moto">Avião</option>
                                    <option value="carro">Barco</option>
                                    <option value="moto">Submarino</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade de dias</label>
                                <input type="number" name="quantidade" class="form-control" required>
                            </div>
                            <button type="button" class="btn btn-success w-100"><STRONG>CALCULAR PREVISÃO</STRONG></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- tabela de veículos cadastrados -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Veículos cadastrados
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Bravado Buffalo</td>
                                        <td>HTF-8723</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Enus Cognoscenti</td>
                                        <td>MQC-9463</td>
                                        <td>
                                            <span class="badge bg-success">Disponível</span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Moto</td>
                                        <td>Pegassi Faggio</td>
                                        <td>M12-65G</td>
                                        <td>
                                            <span class="badge bg-success">Disponível</span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Submarino</td>
                                        <td>Submarino do Titanic</td>
                                        <td>Sei lá</td>
                                        <td>
                                            <span class="badge bg-danger">Afundado</span>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>