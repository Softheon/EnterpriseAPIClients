# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class InsertGroupRequestModel(Model):
    """Model for POST Group input Parameters.

    :param name: Gets or sets the name.
    :type name: str
    :param type: Gets or sets the type. Possible values include: 'Generic',
     'Access', 'Role'
    :type type: str or ~softheon.enterprise.api.client.models.enum
    """

    _validation = {
        'name': {'required': True},
    }

    _attribute_map = {
        'name': {'key': 'Name', 'type': 'str'},
        'type': {'key': 'Type', 'type': 'str'},
    }

    def __init__(self, name, type=None):
        super(InsertGroupRequestModel, self).__init__()
        self.name = name
        self.type = type
