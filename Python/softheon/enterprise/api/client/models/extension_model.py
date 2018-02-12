# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class ExtensionModel(Model):
    """The model that is sent in response to a GET request for Extension.

    :param update_action: Gets or sets the update action. Possible values
     include: 'None', 'Update', 'Add', 'Remove'
    :type update_action: str or ~softheon.enterprise.api.client.models.enum
    :param entity_id: Gets or sets the entity identifier.
    :type entity_id: int
    :param profile_id: Gets or sets the profile identifier.
    :type profile_id: int
    :param id: Gets or sets the identifier.
    :type id: int
    :param drawer_id: Gets or sets the drawer identifier.
    :type drawer_id: int
    :param type: Gets or sets the type.
    :type type: int
    :param row_number: Gets or sets the row number.
    :type row_number: int
    :param strings: Gets or sets the strings.
    :type strings: list[str]
    :param integers: Gets or sets the integers.
    :type integers: list[int]
    :param doubles: Gets or sets the doubles.
    :type doubles: list[float]
    :param dates: Gets or sets the dates.
    :type dates: list[datetime]
    """

    _attribute_map = {
        'update_action': {'key': 'UpdateAction', 'type': 'str'},
        'entity_id': {'key': 'EntityID', 'type': 'int'},
        'profile_id': {'key': 'ProfileID', 'type': 'int'},
        'id': {'key': 'ID', 'type': 'int'},
        'drawer_id': {'key': 'DrawerID', 'type': 'int'},
        'type': {'key': 'Type', 'type': 'int'},
        'row_number': {'key': 'RowNumber', 'type': 'int'},
        'strings': {'key': 'Strings', 'type': '[str]'},
        'integers': {'key': 'Integers', 'type': '[int]'},
        'doubles': {'key': 'Doubles', 'type': '[float]'},
        'dates': {'key': 'Dates', 'type': '[iso-8601]'},
    }

    def __init__(self, update_action=None, entity_id=None, profile_id=None, id=None, drawer_id=None, type=None, row_number=None, strings=None, integers=None, doubles=None, dates=None):
        super(ExtensionModel, self).__init__()
        self.update_action = update_action
        self.entity_id = entity_id
        self.profile_id = profile_id
        self.id = id
        self.drawer_id = drawer_id
        self.type = type
        self.row_number = row_number
        self.strings = strings
        self.integers = integers
        self.doubles = doubles
        self.dates = dates
