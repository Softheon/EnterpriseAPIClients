# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class InsertEntityLinkRequestModel(Model):
    """The EntityLink model for POST Requests.

    :param class_property: Gets or sets the class.
    :type class_property: int
    :param name: Gets or sets the name.
    :type name: str
    :param acl: Gets or sets the acl.
    :type acl: int
    :param page_number: Gets or sets the page number.
    :type page_number: int
    :param note: Gets or sets the note.
    :type note: str
    :param child_drawer_id: Gets or sets the child drawer identifier.
    :type child_drawer_id: int
    :param child_entity_id: Gets or sets the child entity identifier.
    :type child_entity_id: int
    :param child_type: Gets or sets the type of the child.
    :type child_type: int
    :param entity_id: Gets or sets the entity identifier.
    :type entity_id: int
    :param virtual_name: Gets or sets the name of the virtual.
    :type virtual_name: str
    """

    _validation = {
        'name': {'required': True, 'max_length': 255, 'min_length': 0},
        'page_number': {'maximum': 2147483647, 'minimum': 0},
        'note': {'max_length': 255, 'min_length': 0},
        'child_drawer_id': {'maximum': 2147483647, 'minimum': 1},
        'child_entity_id': {'maximum': 2147483647, 'minimum': 1},
        'child_type': {'maximum': 2147483647, 'minimum': 1},
        'entity_id': {'maximum': 2147483647, 'minimum': 1},
        'virtual_name': {'max_length': 255, 'min_length': 0},
    }

    _attribute_map = {
        'class_property': {'key': 'Class', 'type': 'int'},
        'name': {'key': 'Name', 'type': 'str'},
        'acl': {'key': 'Acl', 'type': 'int'},
        'page_number': {'key': 'PageNumber', 'type': 'int'},
        'note': {'key': 'Note', 'type': 'str'},
        'child_drawer_id': {'key': 'ChildDrawerID', 'type': 'int'},
        'child_entity_id': {'key': 'ChildEntityID', 'type': 'int'},
        'child_type': {'key': 'ChildType', 'type': 'int'},
        'entity_id': {'key': 'EntityID', 'type': 'int'},
        'virtual_name': {'key': 'VirtualName', 'type': 'str'},
    }

    def __init__(self, name, class_property=None, acl=None, page_number=None, note=None, child_drawer_id=None, child_entity_id=None, child_type=None, entity_id=None, virtual_name=None):
        super(InsertEntityLinkRequestModel, self).__init__()
        self.class_property = class_property
        self.name = name
        self.acl = acl
        self.page_number = page_number
        self.note = note
        self.child_drawer_id = child_drawer_id
        self.child_entity_id = child_entity_id
        self.child_type = child_type
        self.entity_id = entity_id
        self.virtual_name = virtual_name
