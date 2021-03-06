# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class QueueModel(Model):
    """Defines properties and methods for Queues.

    :param id: Gets or sets the identifier.
    :type id: int
    :param user_count: Gets or sets the user count.
    :type user_count: int
    :param task_count: Gets or sets the task count.
    :type task_count: int
    :param name: Gets or sets the name.
    :type name: str
    :param alias: Gets or sets the alias.
    :type alias: str
    :param state: Gets or sets the state. Possible values include: 'Inactive',
     'Active'
    :type state: str or ~softheon.enterprise.api.client.models.enum
    :param type: Gets or sets the type. Possible values include: 'Inbound',
     'Outbound', 'Access', 'Any', 'Shared', 'Public', 'Recycle', 'Fax',
     'Print', 'Scan', 'Ocr', 'Workflow', 'Schedule', 'System', 'Other',
     'CdoInfostore', 'CdoFolder'
    :type type: str or ~softheon.enterprise.api.client.models.enum
    :param category: Gets or sets the category.
    :type category: str
    :param description: Gets or sets the description.
    :type description: str
    :param reserved_int1: Gets or sets the reserved integer 1.
    :type reserved_int1: int
    :param reserved_int2: Gets or sets the reserved integer 2.
    :type reserved_int2: int
    :param reserved_string1: Gets or sets the reserved string 1.
    :type reserved_string1: str
    :param reserved_string2: Gets or sets the reserved string 2.
    :type reserved_string2: str
    """

    _validation = {
        'name': {'max_length': 255, 'min_length': 0},
        'alias': {'max_length': 255, 'min_length': 0},
        'category': {'max_length': 255, 'min_length': 0},
        'description': {'max_length': 255, 'min_length': 0},
        'reserved_string1': {'max_length': 255, 'min_length': 0},
        'reserved_string2': {'max_length': 255, 'min_length': 0},
    }

    _attribute_map = {
        'id': {'key': 'ID', 'type': 'int'},
        'user_count': {'key': 'UserCount', 'type': 'int'},
        'task_count': {'key': 'TaskCount', 'type': 'int'},
        'name': {'key': 'Name', 'type': 'str'},
        'alias': {'key': 'Alias', 'type': 'str'},
        'state': {'key': 'State', 'type': 'str'},
        'type': {'key': 'Type', 'type': 'str'},
        'category': {'key': 'Category', 'type': 'str'},
        'description': {'key': 'Description', 'type': 'str'},
        'reserved_int1': {'key': 'ReservedInt1', 'type': 'int'},
        'reserved_int2': {'key': 'ReservedInt2', 'type': 'int'},
        'reserved_string1': {'key': 'ReservedString1', 'type': 'str'},
        'reserved_string2': {'key': 'ReservedString2', 'type': 'str'},
    }

    def __init__(self, id=None, user_count=None, task_count=None, name=None, alias=None, state=None, type=None, category=None, description=None, reserved_int1=None, reserved_int2=None, reserved_string1=None, reserved_string2=None):
        super(QueueModel, self).__init__()
        self.id = id
        self.user_count = user_count
        self.task_count = task_count
        self.name = name
        self.alias = alias
        self.state = state
        self.type = type
        self.category = category
        self.description = description
        self.reserved_int1 = reserved_int1
        self.reserved_int2 = reserved_int2
        self.reserved_string1 = reserved_string1
        self.reserved_string2 = reserved_string2
