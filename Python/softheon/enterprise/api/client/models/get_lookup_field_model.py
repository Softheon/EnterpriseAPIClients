# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class GetLookupFieldModel(Model):
    """Model for the GET Lookup Fields input parameters.

    :param column_name: Gets or sets the name of the column.
    :type column_name: str
    :param column_value: Gets or sets the column value.
    :type column_value: str
    """

    _attribute_map = {
        'column_name': {'key': 'ColumnName', 'type': 'str'},
        'column_value': {'key': 'ColumnValue', 'type': 'str'},
    }

    def __init__(self, column_name=None, column_value=None):
        super(GetLookupFieldModel, self).__init__()
        self.column_name = column_name
        self.column_value = column_value
