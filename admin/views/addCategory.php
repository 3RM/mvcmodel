<div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Добавление категории статей</h2>               
            </div>
            <div class="box-content">
                <form role="form" method="post" action="">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title...">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description...">
                    </div>
                    <div class="form-group">
                        <label for="name_category">Category name</label>
                        <input type="text" class="form-control" name="name_category" placeholder="Category name...">
                    </div>
                    <select class="form-control" name="status">
                        <option value="1">Активна</option>
                        <option value="2">Не активна</option>
                    </select>
                    <button type="submit" class="btn btn-default" name="addcat">Submit</button>
                </form>

            </div>
        </div>