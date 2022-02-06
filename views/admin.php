<?php
include './html//header.html';
?>

<body class="bg-light">

    <div class="container">



        <div class="row mt-3">
            <nav class="navbar navbar-expand navbar-light bg-white">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="visually-hidden">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Home</a>
                </div>

            </nav>
        </div>
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6"></div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="row">
                    <div class="col-3 p-5 bg-info mx-1">
                        <p class="lead text-light">
                            DASHBOARD
                        </p>
                    </div>
                    <div class="col-3 p-5 bg-warning mx-1">
                        <p class="lead text-light">
                            MANAGE USERS <i class="fas fa-users"></i>
                        </p>
                    </div>
                    <div class="col-3 p-5 bg-success mx-1">
                        <p class="lead text-light">
                            VIEW COLLEGES <i class="fas fa-school"></i>
                        </p>
                    </div>
                    <div class="col-3 p-5 bg-secondary mx-1 my-1">
                        <p class="lead text-light">
                            VIEW RANKINGS <i class="fas fa-crown"></i>
                        </p>
                    </div>
                    <div class="col-3  p-5 bg-info mx-1 my-1">
                        <p class="lead text-light">
                            MANAGE EVALUATION <i class="fas fa-signal"></i>
                        </p>
                    </div>
                    <div class="col-12 p-5 bg-primary mx-1 my-2">
                        <p class="lead text-light">
                            VIEW REPORTS <i class="fas fa-book-open"></i>
                        </p>
                    </div>

                </div>
            </div>
        </div>


        <div class="row mt-3 border border-1 bg-white p-3">
            <div class="col-12">
                <p class="font-monospace">TOP 4 OF TEACHER'S RANKING</p>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Overall ranking</th>
                            <th>Quick View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Sherlock Holmes</td>
                            <td>Department of Nursing</td>
                            <td>Rank # 3</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modelId">
                                    View Teacher's Profile
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    Add rows here
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Gregory House</td>
                            <td>Department of Nursing</td>
                            <td>Rank # 3</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modelId">
                                    View Teacher's Profile
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    Add rows here
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td></td>
                            <td>Sherlock Holmes</td>
                            <td>Department of Nursing</td>
                            <td>Rank # 3</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modelId">
                                    View Teacher's Profile
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    Add rows here
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td></td>
                            <td>Gregory House</td>
                            <td>Department of Nursing</td>
                            <td>Rank # 3</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modelId">
                                    View Teacher's Profile
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    Add rows here
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>



    <?php include './html/footer.html'; ?>
    <script>
        var modelId = document.getElementById('modelId');

        modelId.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
    </script>