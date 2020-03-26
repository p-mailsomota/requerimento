<?php
setlocale(LC_ALL, NULL);
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Fortaleza');
header('Content-Type: text/html; charset=utf-8');
session_start();

$data = $_SESSION ?? null;

?>
<html>
<header>
    <title>
        Guia de Requerimento
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</header>
<body>
<div class="content">
    <div class="head" style="display: flex; justify-content: flex-start">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="body">
            <div>
                <p>INSTITUTO FEDERAL</p>
                <p>Ceará</p>
                <p>Campos Cedro</p>
            </div>
            <div>
                <p>
                    GUIA DE REQUERIMENTO
                </p>
            </div>
        </div>
    </div>
    <form action="action.php" method="post">
        <div style="padding: 20px; margin-top: 10px; text-align: center; color: green; border-radius: 10px; border: 2px solid green">
            Parabéns tudo está preenchido corretamente!
        </div>
        <div style="display:  flex; justify-content: end">
            <p>Protocolo Nº: <?= $data["p"] ?? '00000' ?></p>
        </div>
        <div class="input-group">
            <label>Rquerente</label>
            <input type="text" name="nome" required value="<?= $data["nome"] ?? "" ?>">
        </div>
        <div class="input-group">
            <label>Matricula</label>
            <input type="text" name="matricula" required value="<?= $data["matricula"] ?? "" ?>">
        </div>
        <div style="display: flex; justify-content: space-between">
            <div class="col-6">
                <label>Data de Nasc.</label>
                <input type="date" name="dataNasc" required value="<?= $data["dataNasc"] ?? "" ?>">
            </div>
            <div class="col-6">
                <label>Naturalidade</label>
                <input type="text" name="naturalidade" required value="<?= $data["naturalidade"] ?? "" ?>">
            </div>
        </div>
        <div style="display: flex; justify-content: space-between">
            <div class="col-6">
                <label>Mae</label>
                <input type="text" name="mae" required value="<?= $data["mae"] ?? "" ?>">
            </div>
            <div class="col-6">
                <label>Pai</label>
                <input type="text" name="pai" required value="<?= $data["pai"] ?? "" ?>">
            </div>
        </div>
        <div style="display: flex; justify-content: space-between">
            <div class="col-4">
                <label>curso</label>
                <input type="text" name="curso" required value="<?= $data["mae"] ?? "" ?>">
            </div>
            <div class="col-4">
                <label>Periodo</label>
                <input type="text" name="periodo" required value="<?= $data["pai"] ?? "" ?>">
            </div>
            <div class="col-4">
                <label>Turno</label>
                <input type="text" name="turno" required value="<?= $data["pai"] ?? "" ?>">
            </div>
        </div>
        <div style="display: flex; justify-content: space-between">
            <div class="col-4">
                <label>Telefone 1</label>
                <input type="text" name="phone1" required value="<?= $data["phone1"] ?? "" ?>">
            </div>
            <div class="col-4">
                <label>Telefone 2</label>
                <input type="text" name="phone2" value="<?= $data["phone2"] ?? "" ?>">
            </div>
            <div class="col-4">
                <label>Email</label>
                <input type="email" name="email" required value="<?= $data["email"] ?? "" ?>">
            </div>
        </div>
        <div style="display: flex; justify-content: space-between; align-items: stretch;">
            <table class="col-6">
                <tr>
                    <td><input type="radio" name="opcao" id="r1"
                               value="2via" <?= isset($data["opcao"]) && $data['opcao'] == '2via' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r1">2º Via (especificar)</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r2"
                               value="aproveitamento" <?= isset($data["opcao"]) && $data['opcao'] == 'aproveitamento' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r2">Aproveitamento de Disciplina
                            (anexar Histórico Escolar e Programa
                            da Disciplina) (especificar)</label></td>
                    <td>Coordenação
                        do Curso
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r3"
                               value="matricula" <?= isset($data["opcao"]) && $data['opcao'] == 'matricula' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r3">Matrícula fora do prazo (justificar)</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r4"
                               value="cancelamento" <?= isset($data["opcao"]) && $data['opcao'] == 'cancelamento' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r4">Cancelamento da Matrícula</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r5"
                               value="colcacao" <?= isset($data["opcao"]) && $data['opcao'] == 'colcacao' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r5">Colação de Grau / Colação Especial
                            (justificar)</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r6"
                               value="declaracao" <?= isset($data["opcao"]) && $data['opcao'] == 'declaracao' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r6">Declaração (especificar)</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r7"
                               value="diploma" <?= isset($data["opcao"]) && $data['opcao'] == 'diploma' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r7">Diploma (especificar)</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r8"
                               value="escolar" <?= isset($data["opcao"]) && $data['opcao'] == 'escolar' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r8">Histórico Escolar</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r9"
                               value="reabertura" <?= isset($data["opcao"]) && $data['opcao'] == 'reabertura' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r9">Reabertura de Matrícula</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r10"
                               value="segunda" <?= isset($data["opcao"]) && $data['opcao'] == 'segunda' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r10">Segunda Chamada (anexar justificativa
                            e especificar)</label></td>
                    <td>Coordenação
                        do Curso
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r11"
                               value="reingresso" <?= isset($data["opcao"]) && $data['opcao'] == 'reingresso' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r11">Reingresso</label></td>
                    <td>CAA</td>
                </tr>
            </table>
            <table class="col-6">
                <tr>
                    <td><input type="radio" name="opcao" id="r12"
                               value="trancamento" <?= isset($data["opcao"]) && $data['opcao'] == 'trancamento' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r12">Trancamento de Disciplina (especificar)</label></td>
                    <td>Coordenação dos Cursos</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r13"
                               value="trancamentod" <?= isset($data["opcao"]) && $data['opcao'] == 'trancamentod' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r13">Trancamento de Matrícula (anexar
                            documentação comprobatória)</label></td>
                    <td>Coordenação
                        Pedagógica
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r14"
                               value="trancamento" <?= isset($data["opcao"]) && $data['opcao'] == 'trancamento' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r14">Transferência para outra instituição</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r15"
                               value="validacao" <?= isset($data["opcao"]) && $data['opcao'] == 'validacao' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r15">Validação de Conhecimento
                            (especificar)</label></td>
                    <td>Coordenação do Cursos</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r16"
                               value="reajuste" <?= isset($data["opcao"]) && $data['opcao'] == 'reajuste' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r16">Reajuste</label></td>
                    <td>CAA</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r17"
                               value="prova" <?= isset($data["opcao"]) && $data['opcao'] == 'prova' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r17">Recorreção de Prova</label></td>
                    <td>Coordenação do Cursos</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r18"
                               value="transporte" <?= isset($data["opcao"]) && $data['opcao'] == 'transporte' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r18">AUXÍLIO - Transporte</label></td>
                    <td>Serviço Social</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r19"
                               value="moradia" <?= isset($data["opcao"]) && $data['opcao'] == 'moradia' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r19">AUXÍLIO - Moradia</label></td>
                    <td>Serviço Social</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r20"
                               value="oculos" <?= isset($data["opcao"]) && $data['opcao'] == 'oculos' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r20">AUXÍLIO - Óculos</label></td>
                    <td>Serviço Social</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r21"
                               value="paimae" <?= isset($data["opcao"]) && $data['opcao'] == 'paimae' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="21">AUXÍLIO - Pais e Mães</label></td>
                    <td>Serviço Social</td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" id="r22"
                               value="outros" <?= isset($data["opcao"]) && $data['opcao'] == 'outros' ? 'checked' : '' ?> >
                    </td>
                    <td><label for="r22">Outros (especificar)</label></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div>
            <label>Especificar</label>
            <textarea name="especificar" id="" cols="30" rows="3"><?= $data["especificar"] ?? null ?></textarea>
        </div>
        <div>
            <label>Justificar</label>
            <textarea name="justificar" id="" cols="30" rows="3"><?= $data["justificar"] ?? null ?></textarea>
        </div>
        <div style="text-align: center">
            <h5>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</h5>
            <div style="display: flex; justify-content: space-between">
                <div class="col-6">
                    <label>REQUERENTE (ASS. LEGÍVEL)</label>
                    <input type="text" name="a1" required value="<?= $data["a1"] ?? "" ?>">
                </div>
                <div class="col-6">
                    <label>FUNCIONÁRIO (ASS. LEGÍVEL)</label>
                    <input type="text" name="a2" required value="<?= $data["a2"] ?? "" ?>">
                </div>
            </div>
        </div>
        <div style="text-align: center">
            <h4>CEDRO-CE,<?= utf8_encode(strftime('%d de %B de %Y', strtotime('today'))); ?></h4>
        </div>
        <div style="display: flex; justify-content: space-between">
            <div class="col-6" style="text-align: center">
                <div>
                    <p>VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</p>
                    <p>
                        <input type="radio" name="ch_v" id="chv1" value="n"
                               style="width: auto" <?= isset($data["ch_v"]) && $data['ch_v'] == 'n' ? 'checked' : '' ?> >
                        <label for="chv1">O requerente NÃO deve chave de armário</label>
                    </p>
                    <p>
                        <input type="radio" name="ch_v" id="chv2" value="s"
                               style="width: auto" <?= isset($data["ch_v"]) && $data['ch_v'] == 's' ? 'checked' : '' ?>>
                        <label for="chv2">O requerente DEVE chave de armário</label>
                    </p>
                    <input type="text" name="vt1" value="<?= $data["vt1"] ?? null ?>">
                </div>
                <div>
                    <label>Responsável (ass. Legível)</label>
                    <input type="text" name="a3" value="<?= $data["a3"] ?? null ?>">
                </div>
            </div>
            <div class="col-6" style="text-align: center">
                <div>
                    <p>VISTO (BIBLIOTECA)</p>
                    <p>
                        <input type="radio" name="ch_b" id="chv3" value="n"
                               style="width: auto" <?= isset($data["ch_b"]) && $data['ch_b'] == 'n' ? 'checked' : '' ?> >
                        <label for="chv3">O requerente NÃO deve livros na biblioteca</label>
                    </p>
                    <p>
                        <input type="radio" name="ch_b" id="chv4" value="s"
                               style="width: auto" <?= isset($data["ch_b"]) && $data['ch_b'] == 's' ? 'checked' : '' ?>>
                        <label for="chv4">O requerente deve livros na biblioteca:</label>
                    </p>
                    <input type="text" name="vt2" value="<?= $data["vt2"] ?? null ?>">
                </div>
                <div>
                    <label>Responsável (ass. Legível)</label>
                    <input type="text" name="a4" required value="<?= $data["a4"] ?? null ?>">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>