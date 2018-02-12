# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class WorkflowActionModel(Model):
    """Defines properties and methods for Workflow Action Model.

    :param task_id: Gets or sets the task identifier.
    :type task_id: int
    :param target_id: Gets or sets the target id.
    :type target_id: int
    :param queue_name: Gets or sets the name of the queue.
    :type queue_name: str
    :param source: Gets or sets the source.
    :type source: str
    :param computer: Gets or sets the name of the computer.
    :type computer: str
    :param ip_address: Gets or sets the IP address.
    :type ip_address: str
    """

    _validation = {
        'task_id': {'maximum': 2147483647, 'minimum': 0},
        'target_id': {'maximum': 2147483647, 'minimum': 0},
        'queue_name': {'max_length': 255, 'min_length': 0},
        'source': {'max_length': 255, 'min_length': 0},
        'computer': {'max_length': 255, 'min_length': 0},
        'ip_address': {'max_length': 255, 'min_length': 0},
    }

    _attribute_map = {
        'task_id': {'key': 'TaskID', 'type': 'int'},
        'target_id': {'key': 'TargetID', 'type': 'int'},
        'queue_name': {'key': 'QueueName', 'type': 'str'},
        'source': {'key': 'Source', 'type': 'str'},
        'computer': {'key': 'Computer', 'type': 'str'},
        'ip_address': {'key': 'IPAddress', 'type': 'str'},
    }

    def __init__(self, task_id=None, target_id=None, queue_name=None, source=None, computer=None, ip_address=None):
        super(WorkflowActionModel, self).__init__()
        self.task_id = task_id
        self.target_id = target_id
        self.queue_name = queue_name
        self.source = source
        self.computer = computer
        self.ip_address = ip_address
