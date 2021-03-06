# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class DrawerModel(Model):
    """The model that is sent in response to a GET request for Drawers.

    :param id: Gets or sets the identifier.
    :type id: int
    :param cabinet_id: Gets or sets the cabinet identifier.
    :type cabinet_id: int
    :param user_id: Gets or sets the user identifier.
    :type user_id: int
    :param user_full_name: Gets or sets the full name of the user.
    :type user_full_name: str
    :param name: Gets or sets the name.
    :type name: str
    :param edition: Gets or sets the edition.
    :type edition: int
    :param state: Gets or sets the state.
    :type state: int
    :param entity_feature: Gets or sets the entity feature.
    :type entity_feature: int
    :param attachment_feature: Gets or sets the attachment feature.
    :type attachment_feature: int
    :param note_feature: Gets or sets the note feature.
    :type note_feature: int
    :param reserved_int1: Gets or sets the reserved integer 1.
    :type reserved_int1: int
    :param reserved_int2: Gets or sets the reserved integer 2.
    :type reserved_int2: int
    :param reserved_string1: Gets or sets the reserved string1.
    :type reserved_string1: str
    :param reserved_string2: Gets or sets the reserved string2.
    :type reserved_string2: str
    """

    _validation = {
        'name': {'required': True, 'max_length': 255, 'min_length': 0},
        'edition': {'maximum': 2147483647, 'minimum': 0},
        'reserved_string1': {'max_length': 255, 'min_length': 0},
        'reserved_string2': {'max_length': 255, 'min_length': 0},
    }

    _attribute_map = {
        'id': {'key': 'ID', 'type': 'int'},
        'cabinet_id': {'key': 'CabinetID', 'type': 'int'},
        'user_id': {'key': 'UserID', 'type': 'int'},
        'user_full_name': {'key': 'UserFullName', 'type': 'str'},
        'name': {'key': 'Name', 'type': 'str'},
        'edition': {'key': 'Edition', 'type': 'int'},
        'state': {'key': 'State', 'type': 'int'},
        'entity_feature': {'key': 'EntityFeature', 'type': 'int'},
        'attachment_feature': {'key': 'AttachmentFeature', 'type': 'int'},
        'note_feature': {'key': 'NoteFeature', 'type': 'int'},
        'reserved_int1': {'key': 'ReservedInt1', 'type': 'int'},
        'reserved_int2': {'key': 'ReservedInt2', 'type': 'int'},
        'reserved_string1': {'key': 'ReservedString1', 'type': 'str'},
        'reserved_string2': {'key': 'ReservedString2', 'type': 'str'},
    }

    def __init__(self, name, id=None, cabinet_id=None, user_id=None, user_full_name=None, edition=None, state=None, entity_feature=None, attachment_feature=None, note_feature=None, reserved_int1=None, reserved_int2=None, reserved_string1=None, reserved_string2=None):
        super(DrawerModel, self).__init__()
        self.id = id
        self.cabinet_id = cabinet_id
        self.user_id = user_id
        self.user_full_name = user_full_name
        self.name = name
        self.edition = edition
        self.state = state
        self.entity_feature = entity_feature
        self.attachment_feature = attachment_feature
        self.note_feature = note_feature
        self.reserved_int1 = reserved_int1
        self.reserved_int2 = reserved_int2
        self.reserved_string1 = reserved_string1
        self.reserved_string2 = reserved_string2
