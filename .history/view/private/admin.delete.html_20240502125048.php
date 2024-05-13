<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Admin Delete</title>
</head>
<body>
<div class="container">
        <div id="toolbar">
            <button id="remove" class="btn btn-danger bi bi-trash" disabled>
                Remove
            </button>
          </div>
        <table 
            id="table"
            class="table table-striped"
            data-toggle="table"
            data-toolbar="#toolbar"
            data-show-export="true"
            data-click-to-select="true"
            data-pagination="true"
            data-page-list="[2,4,6,8]"
            data-minimum-count-columns="2"
            data-show-columns="true"
            data-show-columns-toggle-all="true"
            >
    <h1>Admin Delete</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    
    <div class="content">
        <h2>Delete d'une data</h2>
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
        <input type="number"  name="id" placeholder="id" value="<?=$data['id']?>" disabled><br>
        <input type="text" name="title" placeholder="title" value="<?=$data['nom']?>" disabled><br>
        <textarea name="ourdesc" placeholder="Descrition" disabled><?=$data['adresse']?></textarea><br>
        <input type="number"  name="codepostal" placeholder="codepostal" value="<?=$data['codepostal']?>" disabled><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" value="<?=$data['latitude']?>" disabled><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" value="<?=$data['longitude']?>" disabled><br>
        <a href="?delete=<?=$idDelete?>&ok"><button>Supprimer</button></a> | <a href="./"><button>Ne pas supprimer</button></a>

    </div>
</body>
</html>
<thead>
                <tr>
                    <th data-checkbox="true" data-field="state"></th>
                    <th data-field="id">ID</th>
                    <div class="content">
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
        <input type="number"  name="id" placeholder="id" value="<?=$data['id']?>" disabled><br>
        <input type="text" name="title" placeholder="title" value="<?=$data['nom']?>" disabled><br>
        <textarea name="ourdesc" placeholder="Descrition" disabled><?=$data['adresse']?></textarea><br>
        <input type="number"  name="codepostal" placeholder="codepostal" value="<?=$data['codepostal']?>" disabled><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" value="<?=$data['latitude']?>" disabled><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" value="<?=$data['longitude']?>" disabled><br>
        <a href="?delete=<?=$idDelete?>&ok"><button>Supprimer</button></a> | <a href="./"><button>Ne pas supprimer</button></a>
                    <th data-events="operateEvents">Actions</th>
                </tr>
            </thead>
            <body>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>Vanwassenhove</td>
                    <td>Kevin</td>
                    <td class="text-center">
                        <a href="#"><i class="edit bi bi-pen me-4"></i></a>
                        <a href="#"><i class="remove bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>Vanwassenhove</td>
                    <td>Kevin</td>
                    <td class="text-center">
                        <a href="#"><i class="edit bi bi-pen me-4"></i></a>
                        <a href="#"><i class="remove bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>Vanwassenhove</td>
                    <td>Kevin</td>
                    <td class="text-center">
                        <a href="#"><i class="edit bi bi-pen me-4"></i></a>
                        <a href="#"><i class="remove bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>4</td>
                    <td>Vanwassenhove</td>
                    <td>Kevin</td>
                    <td class="text-center">
                        <a href="#"><i class="edit bi bi-pen me-4"></i></a>
                        <a href="#"><i class="remove bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>5</td>
                    <td>Vanwassenhove</td>
                    <td>Kevin</td>
                    <td class="text-center">
                        <a href="#"><i class="edit bi bi-pen me-4"></i></a>
                        <a href="#"><i class="remove bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>6</td>
                    <td>Vanwassenhove</td>
                    <td>Kevin</td>
                    <td class="text-center">
                        <a href="#"><i class="edit bi bi-pen me-4"></i></a>
                        <a href="#"><i class="remove bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
            </body>
        </table>
    </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            const $table = $('#table');
            const $remove = $('#remove');
            let selections;
            window.operateEvents = {
                'click .remove': function (e, value, row, index) {
                    if(confirm(`Êtes-vous sûre de vouloir supprimer l'élément avec comme ID ${row.id} ?`))
                        $table.bootstrapTable('remove', {
                            field: 'id',
                            values: [row.id]
                        })
                },
                'click .edit': function (e, value, row, index) {
                    console.log(e);
                    console.log(value);
                    console.log(row);
                    console.log(index);
                }
            }
            $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
                    $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
                    selections = getIdSelections();
                }
            )
            $remove.click(function () {
                if(confirm(`Êtes-vous sûre de vouloir supprimer ces éléments ?`)){
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: selections
                    });
                    $remove.prop('disabled', true);
                }
             })
            function getIdSelections() {
                return $.map($table.bootstrapTable('getSelections'), function (row) {
                    return row.id;
                })
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.28.0/tableExport.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table-locale-all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
</body>
</html>