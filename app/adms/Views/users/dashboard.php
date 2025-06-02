<?php

if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}


$id = $_SESSION['user_id'];
$nome = $_SESSION['user_name'];

if (!empty($this->data[0])) {
    $_SESSION['valor'] = $this->data[0];
}


?>


<div class="wrapper">
    <div class="row-dashboard">
        <div class="row-form">
            <div class=" wrapper-msg">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
            <div class="rowDashboard">
                <div class=" box-firstDashboard">
                    <form action="" method="POST" id="form-addRegis">
                        <div class="row-5 inputDashboard ">

                            <div class="row-1">

                                <label>
                                    <input type="checkbox" name="um[]" value="1"><span>01</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="2"> <span>02</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="3"> <span>03</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="4"><span>04</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="5"><span>05</span>
                                </label>
                            </div>
                            <div class="row-1">
                                <label>
                                    <input type="checkbox" name="um[]" value="6"><span>06</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="7"><span>07</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="8"><span>08</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="9"><span>09</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="10"><span>10</span>
                                </label>
                            </div>
                            <div class="row-1 ">
                                <label>
                                    <input type="checkbox" name="um[]" value="11"><span>11</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="12"><span>12</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="13"><span>13</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="14"><span>14</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="15"><span>15</span>
                                </label>
                            </div>
                            <div class="row-1 ">
                                <label>
                                    <input type="checkbox" name="um[]" value="16"><span>16</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="17"><span>17</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="18"><span>18</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="19"><span>19</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="20"><span>20</span>
                                </label>
                            </div>
                            <div class="row-1">
                                <label>
                                    <input type="checkbox" name="um[]" value="21"><span>21</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="22"><span>22</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="23"><span>23</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="24"><span>24</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="um[]" value="25"><span>25</span>
                                </label>
                            </div>
                        </div>
                        <div class="row-1 divSubmit">
                            <input type="submit" class="btn btn-success" name="SendFormRegis" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>