# Orange-MVC-Framework
a little framework i made to challange myself in PHP

I wanted to learn more about PHP including Namespaces and spl_autoload so i made this thing.

Database: http://paste.ubuntu.com/16468555/

    ClassName is the same as your sql table name

    ClassName::all(array $rows) default (['*'])
        Return many Table[Row Object] Object

    ClassName::where(string $row, string $value, array $rows) default ('id', '1', ['*'])
        Return many Table[Row Object] Object

### TODO:

    ClassName::one(string $id, array $rows) default (1, ['*']) 
        Return 1 Row Object

    ClassName::haveOne('category', 'id', 'item_id') default (null, 'id', '{className}_id')
        Return 1 Row Object

    ClassName::haveMany('images', 'id', 'item_id') default (null, 'id', '{className}_id')
        Return many Table[Row Object] Object

    ClassName::delete(string $id) default (null)
        Return boolean

    Row::update(array [column => value])
        Return boolean

    ClassName::update(string $id, array [column => value])
        Return boolean

    ClassName::insert(array [row => value])
        Return boolean