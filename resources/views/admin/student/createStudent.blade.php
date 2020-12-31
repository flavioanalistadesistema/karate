@extends('adminlte::page')
@section('title', 'Dashboard | Lara Admin')
@section('content_header')
@stop
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Novo Aluno</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/student">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="name_student">Nome</label>
                    <input type="text" class="form-control" name="name_student" placeholder="Digite nome do aluno">
                </div>
                <div class="form-group col-md-3">
                    <label for="date_brith_student">Data Nasc.</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" class="form-control" name="date_brith_student" placeholder="Digite nome do aluno">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="rg_student">Rg</label>
                    <input type="text" class="form-control" name="rg_student" placeholder="Rg do aluno">
                </div>
                <div class="form-group col-md-3">
                    <label for="cpf_student">CPF</label>
                    <input type="text" class="form-control" name="cpf_student" placeholder="CPF do aluno">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-9">
                    <label for="address_student">Endereço</label>
                    <input type="text" class="form-control" name="address_student" placeholder="Digite o endereço do aluno">
                </div>
                <div class="form-group col-md-3">
                    <label for="address_number_student">N°</label>
                    <input type="text" class="form-control" name="address_number_student" placeholder="Numero da residencia">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label form="phone">Celular</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" name="phone" placeholder="Digite numero do celular do aluno" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite e-mail do aluno">
                </div>
                <div class="form-group col-md-2">
                    <label form="modalities_student">Modalidades</label>
                    <select class="form-control select2" name="modalities_student" id="modalities_student" style="width: 100%;">
                        <option selected="selected" value="karate">Karate</option>
                        <option value="judo">Judo</option>
                        <option disabled="disabled">Teste (disabled)</option>
                        <option value="kugfu">KungFu</option>
                        <option value="taekendo">Taekendo</option>
                        <option value="box">Box</option>
                        <option value="teste">teste</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="teacher_student">Professor</label>
                    <select class="form-control select2" name="teacher_student" id="teacher_student" style="width: 100%;">
                        <option selected="selected" value="luciano">Luciano</option>
                        <option value="flavio">Flávio</option>
                        <option disabled="disabled">Henrique (disabled)</option>
                        <option value="gabriel">Gabriel</option>
                        <option value="rafael">Rafael</option>
                        <option value="joao">Joao</option>
                        <option value="Kobaiakawa">Kobaiakawa</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="teacher_student">Horário</label>
                    <select class="form-control select2" name="schedule_student" id="schedule_student" style="width: 100%;">
                        <option selected="selected" value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="date_start_student">Data Inicio.</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" class="form-control" name="date_start_student" placeholder="Digite data de inicio">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="teacher_student">Data pag.</label>
                    <select class="form-control select2" name="date_payday_student" id="date_payday_student" style="width: 100%;">
                        <option selected="selected" value="dia 5">dia 5</option>
                        <option value="dia 10">dia 10</option>
                        <option value="dia 15">dia 15</option>
                        <option value="dia 20">dia 20</option>
                        <option value="dia 25">dia 25</option>
                        <option value="dia 30">dia 30</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tax">Taxa de contribuição mensal</label>
                    <input type="text" class="form-control" name="tax" placeholder="Digite o valor">
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop
